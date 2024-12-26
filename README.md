# Introduction

A ready-to-use template for creating PHP packages, specifically designed for PHP 8.1.

## Features

- **PHP 8.1 support** 
- **Unit Testing:** Pre-configured PEST setup
- **Code Formatting:** Integrated PHP CS Fixer for consistent code styling.
- **Dependency Management:** Composer for easy package management
- **GitHub Actions:** Built-in CI pipeline for automated testing and quality checks. 
- **MIT License:** Distributed under the permissive MIT License.
- **Editor Configuration:** Includes an `.editorconfig` file to ensure consistent code formatting across various editors.
- **Git Attributes:** Includes a `.gitattributes` file for cleaner exports by excluding unnecessary files when your package is installed via Composer.

## Usage

1. Update `composer.json`
   - Replace `theorgman/template-package-php81` with your desired package name.
   - Update the following keys:
     - name
     - description
     - keywords
     - homepage
     - autoload.psr-4
     - autoload-dev.psr-4
2. Update namespaces
   - Update all namespaces in the `src` and `tests` folders to match your package's name.
   - Update namespaces in the following files:
     - `src/DummyClass.php`
     - `tests/Feature/ExampleTest.php`
     - `tests/Unit/ExampleTest.php`
     - `tests\TestCase.php`

## Development Tools

### Run tests

`composer test`

### Format Code Style

`composer format`
