# Contributing to ICTServe

Thank you for your interest in contributing to ICTServe! This document provides guidelines and instructions for contributing to the project.

## Code of Conduct

By participating in this project, you agree to abide by our code of conduct:

- Use welcoming and inclusive language
- Be respectful of differing viewpoints and experiences
- Gracefully accept constructive criticism
- Focus on what is best for the community
- Show empathy towards other community members

## Development Workflow

### Branch Strategy

We use a GitFlow-inspired branching strategy:

- `main` - Production-ready code
- `develop` - Integration branch for features
- `feature/*` - Feature development branches
- `bugfix/*` - Bug fix branches
- `hotfix/*` - Critical production fixes

### Branch Naming Convention

- **Features**: `feature/<issue-id>-short-description`
  - Example: `feature/123-user-authentication`
- **Bug fixes**: `bugfix/<issue-id>-fix-name`
  - Example: `bugfix/456-login-validation-error`
- **Hotfixes**: `hotfix/<issue-id>-urgent-fix`
  - Example: `hotfix/789-security-patch`

### Commit Message Format

We follow the [Conventional Commits](https://www.conventionalcommits.org/) specification:

```
<type>[optional scope]: <description>

[optional body]

[optional footer(s)]
```

#### Types

- `feat`: A new feature
- `fix`: A bug fix
- `docs`: Documentation only changes
- `style`: Changes that do not affect the meaning of the code
- `refactor`: A code change that neither fixes a bug nor adds a feature
- `perf`: A code change that improves performance
- `test`: Adding missing tests or correcting existing tests
- `chore`: Changes to the build process or auxiliary tools

#### Examples

```
feat: add user registration functionality

fix: resolve database connection timeout issue

docs: update installation instructions

test: add unit tests for user model
```

## Pull Request Process

1. **Create a feature branch** from `develop`

   ```bash
   git checkout develop
   git pull origin develop
   git checkout -b feature/123-your-feature-name
   ```

2. **Make your changes** following our coding standards

3. **Write tests** for your changes

   ```bash
   php artisan test
   ```

4. **Update documentation** if necessary

5. **Commit your changes** using conventional commit format

   ```bash
   git commit -m "feat: add new feature description"
   ```

6. **Push to your branch**

   ```bash
   git push origin feature/123-your-feature-name
   ```

7. **Create a Pull Request** to `develop` branch

### Pull Request Requirements

- [ ] All tests pass
- [ ] Code follows PSR-12 coding standards
- [ ] Documentation is updated if necessary
- [ ] At least one reviewer approval
- [ ] All CI checks pass
- [ ] No merge conflicts

## Coding Standards

### PHP

We follow PSR-12 coding standards. Use Laravel Pint for automatic formatting:

```bash
./vendor/bin/pint
```

### Database

- Use descriptive migration names
- Always provide rollback functionality
- Use proper foreign key constraints
- Add indexes for frequently queried columns

### Testing

- Write feature tests for user-facing functionality
- Write unit tests for complex business logic
- Maintain test coverage above 80%
- Use meaningful test names that describe the scenario

```php
public function test_user_can_create_loan_application(): void
{
    // Test implementation
}
```

### Frontend

- Use semantic HTML elements
- Ensure accessibility compliance (WCAG 2.1 AA)
- Add proper ARIA labels where needed
- Test with keyboard navigation

## Development Setup

1. **Fork the repository**

2. **Clone your fork**

   ```bash
   git clone https://github.com/your-username/ictserve.git
   cd ictserve
   ```

3. **Add upstream remote**

   ```bash
   git remote add upstream https://github.com/motac/ictserve.git
   ```

4. **Install dependencies**

   ```bash
   composer install
   npm install
   ```

5. **Set up environment**

   ```bash
   cp .env.example .env
   php artisan key:generate
   ```

6. **Run migrations**

   ```bash
   php artisan migrate
   ```

7. **Build assets**

   ```bash
   npm run dev
   ```

## Local Development Commands

```bash
# Start development server
php artisan serve

# Watch for frontend changes
npm run dev

# Run tests
php artisan test

# Run code formatting
./vendor/bin/pint

# Clear caches
php artisan optimize:clear

# Check code quality
composer audit
```

## Issue Reporting

When reporting issues, please include:

1. **Description**: Clear description of the problem
2. **Steps to reproduce**: Numbered steps to reproduce the issue
3. **Expected behavior**: What you expected to happen
4. **Actual behavior**: What actually happened
5. **Environment**: PHP version, Laravel version, browser, OS
6. **Screenshots**: If applicable

### Issue Template

```markdown
## Description
Brief description of the issue

## Steps to Reproduce
1. Go to '...'
2. Click on '....'
3. Scroll down to '....'
4. See error

## Expected Behavior
A clear description of what you expected to happen.

## Actual Behavior
A clear description of what actually happened.

## Environment
- PHP Version: 8.2
- Laravel Version: 12.x
- Browser: Chrome 120
- OS: Windows 11

## Additional Context
Add any other context about the problem here.
```

## Feature Requests

Before submitting a feature request:

1. Check if the feature already exists
2. Search existing issues for similar requests
3. Consider if it fits the project scope
4. Provide a clear use case

## Security Issues

**Do not report security vulnerabilities through public GitHub issues.**

Instead, email security reports to: [security@motac.gov.my]

Include:

- Description of the vulnerability
- Steps to reproduce
- Potential impact
- Suggested fix (if any)

## Documentation

When contributing documentation:

- Use clear, concise language
- Include code examples where appropriate
- Update relevant sections consistently
- Test instructions on a fresh installation

## Recognition

Contributors will be recognized in:

- GitHub contributors list
- Release notes for significant contributions
- Project documentation

## Questions?

If you have questions about contributing:

- Check existing documentation
- Search closed issues
- Ask in GitHub Discussions
- Contact the maintainers

Thank you for contributing to ICTServe! 🚀
