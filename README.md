# Laravel Design Breadcrumbs

Breadcrumb navigation component for Laravel. Supports Livewire, Blade, and Vue 3.

## Installation

```bash
composer require mrshanebarron/breadcrumbs
```

## Usage

### Livewire Component

```blade
<livewire:ld-breadcrumbs />
```

### Blade Component

```blade
<x-ld-breadcrumbs />
```

## Configuration

Publish the config file:

```bash
php artisan vendor:publish --tag=ld-breadcrumbs-config
```

## Customization

### Publishing Views

```bash
php artisan vendor:publish --tag=ld-breadcrumbs-views
```

## License

MIT
