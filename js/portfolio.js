// Portfolio Page JavaScript
// Adapted from Benjanard scraper for WordPress integration

// Global variables
let portfolioData = null;
const AUTH_KEY = 'portfolio_authenticated';

// DOM elements
const passwordGate = document.getElementById('passwordGate');
const portfolioApp = document.getElementById('portfolioApp');
const passwordForm = document.getElementById('passwordForm');
const passwordInput = document.getElementById('passwordInput');
const passwordError = document.getElementById('passwordError');
const loadingEl = document.getElementById('loading');
const errorEl = document.getElementById('error');
const contentEl = document.getElementById('content');
const errorMessageEl = document.getElementById('errorMessage');
const refreshBtn = document.getElementById('refreshBtn');

document.addEventListener('DOMContentLoaded', function() {
    // Check if we're on the portfolio page
    if (!portfolioApp) return;
    
    // Skip password check - directly show app
    showApp();

    if (refreshBtn) {
        refreshBtn.addEventListener('click', function() {
            refreshBtn.disabled = true;
            const originalText = refreshBtn.innerHTML;
            refreshBtn.innerHTML = '<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"></circle><path d="m15 9-6 6"></path><path d="m9 9 6 6"></path></svg> Loading...';
            loadPortfolioData(true).finally(() => {
                refreshBtn.disabled = false;
                refreshBtn.innerHTML = originalText;
            });
        });
    }
});

async function handlePasswordSubmit(e) {
    e.preventDefault();
    passwordError.textContent = '';
    const password = passwordInput.value.trim();
    if (!password) return;

    try {
        // Use WordPress AJAX endpoint
        const formData = new FormData();
        formData.append('action', 'portfolio_auth');
        formData.append('password', password);
        formData.append('nonce', portfolioAjax.nonce);

        const response = await fetch(portfolioAjax.ajaxurl, {
            method: 'POST',
            body: formData
        });

        const data = await response.json();
        
        if (data.success) {
            sessionStorage.setItem(AUTH_KEY, 'true');
            showApp();
        } else {
            passwordError.textContent = data.data || 'รหัสผ่านไม่ถูกต้อง';
            passwordInput.value = '';
            passwordInput.focus();
        }
    } catch (err) {
        passwordError.textContent = 'เกิดข้อผิดพลาด กรุณาลองใหม่อีกครั้ง';
        console.error('Auth error:', err);
    }
}

function showApp() {
    if (passwordGate) passwordGate.style.display = 'none';
    if (portfolioApp) portfolioApp.style.display = 'block';
    loadPortfolioData();
}

async function loadPortfolioData(forceRefresh = false) {
    showLoading();

    try {
        // Use WordPress AJAX endpoint
        const formData = new FormData();
        formData.append('action', 'get_portfolio_data');
        formData.append('refresh', forceRefresh ? '1' : '0');
        formData.append('nonce', portfolioAjax.nonce);

        const response = await fetch(portfolioAjax.ajaxurl, {
            method: 'POST',
            body: formData
        });

        const result = await response.json();
        
        if (result.success) {
            portfolioData = result.data;
            displayPortfolioData();
        } else {
            throw new Error(result.data || 'Failed to load portfolio data');
        }
    } catch (error) {
        console.error('Error loading portfolio:', error);
        showError(error.message);
    } finally {
        refreshBtn.disabled = false;
        refreshBtn.textContent = 'Refresh Data';
    }
}

function showLoading() {
    loadingEl.style.display = 'block';
    errorEl.style.display = 'none';
    contentEl.style.display = 'none';
}

function showError(message) {
    loadingEl.style.display = 'none';
    errorEl.style.display = 'block';
    contentEl.style.display = 'none';
    errorMessageEl.textContent = message;
}

function displayPortfolioData() {
    if (!portfolioData) return;

    loadingEl.style.display = 'none';
    errorEl.style.display = 'none';
    contentEl.style.display = 'block';

    displayProjects();
}

function displayProjects() {
    const projectsContainer = document.getElementById('projectsContainer');
    if (!projectsContainer) return;
    
    projectsContainer.innerHTML = '';

    if (!portfolioData.projects || portfolioData.projects.length === 0) {
        projectsContainer.innerHTML = '<p class="project-description">No projects found.</p>';
        return;
    }

    portfolioData.projects.forEach(project => {
        const projectItem = createProjectItem(project);
        projectsContainer.appendChild(projectItem);
    });
}

function createProjectItem(project) {
    const item = document.createElement('article');
    item.className = 'project-item';

    const title = escapeHtml(project.title || 'Untitled Project');
    const description = escapeHtml(project.description || project.subtitle || '');
    
    let linkHtml = '';
    if (project.websiteUrl && project.websiteUrl.includes('http')) {
        linkHtml = `<a href="${escapeHtml(project.websiteUrl)}" target="_blank" rel="noopener" class="project-link">View Project</a>`;
    }

    item.innerHTML = `
        <div class="project-header">
            <h3 class="project-title">${title}</h3>
            ${linkHtml}
        </div>
        ${description ? `<p class="project-description">${description}</p>` : ''}
    `;

    return item;
}

function escapeHtml(text) {
    if (!text) return '';
    const div = document.createElement('div');
    div.textContent = text;
    return div.innerHTML;
}