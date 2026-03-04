#!/bin/bash

# Hashbox Studio WordPress Theme Deployment Script
# Usage: ./deploy.sh

echo "🚀 Hashbox Studio Theme Deployment"
echo "=================================="

# Colors for output
RED='\033[0;31m'
GREEN='\033[0;32m'
YELLOW='\033[1;33m'
BLUE='\033[0;34m'
NC='\033[0m' # No Color

# Check if required files exist
echo -e "${BLUE}Checking required files...${NC}"

required_files=("style.css" "functions.php" "index.php" "header.php" "footer.php" "front-page.php")

for file in "${required_files[@]}"; do
    if [ -f "$file" ]; then
        echo -e "${GREEN}✓${NC} $file"
    else
        echo -e "${RED}✗${NC} $file (missing)"
        exit 1
    fi
done

# Check directories
required_dirs=("template-parts" "js")

for dir in "${required_dirs[@]}"; do
    if [ -d "$dir" ]; then
        echo -e "${GREEN}✓${NC} $dir/"
    else
        echo -e "${RED}✗${NC} $dir/ (missing)"
        exit 1
    fi
done

echo ""
echo -e "${BLUE}Creating deployment package...${NC}"

# Create deployment directory
mkdir -p deploy/hashbox-studio

# Copy theme files
cp -r . deploy/hashbox-studio/

# Clean up deployment directory
cd deploy/hashbox-studio
rm -rf .git
rm -f .gitignore
rm -f deploy.sh
rm -f DEPLOYMENT-GUIDE.md
rm -f README.md

# Create theme zip
cd ..
zip -r hashbox-studio-theme.zip hashbox-studio/

echo -e "${GREEN}✓${NC} Theme package created: deploy/hashbox-studio-theme.zip"

# Create WordPress files package
echo -e "${BLUE}Creating WordPress configuration files...${NC}"

mkdir -p wordpress-config

# Copy configuration files
cp ../wp-config-sample.php wordpress-config/
cp ../.htaccess wordpress-config/

echo -e "${GREEN}✓${NC} WordPress config files ready in: deploy/wordpress-config/"

echo ""
echo -e "${YELLOW}📦 Deployment Package Ready!${NC}"
echo ""
echo "Files created:"
echo "  • deploy/hashbox-studio-theme.zip (WordPress Theme)"
echo "  • deploy/wordpress-config/ (Configuration files)"
echo ""
echo -e "${BLUE}Next steps:${NC}"
echo "1. Upload hashbox-studio-theme.zip to WordPress admin"
echo "2. Configure wp-config.php with your database details"
echo "3. Upload .htaccess to your site root"
echo "4. Activate the theme in WordPress admin"
echo ""
echo -e "${GREEN}Ready to deploy to hashbox.co.th! 🎉${NC}"