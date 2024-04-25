default: lint

# Continuously test and lint, helpful for local development
dev:
    just lint & just test

# Check types on any file change
lint:
    find src/ tests/ | entr -s 'composer run lint'

# Run tests in parallel
test:
    find src/ tests/ | entr -s 'composer run test'

# Run tests in parallel
fmt:
    find src/ tests/ | entr -s 'composer run refactor'
