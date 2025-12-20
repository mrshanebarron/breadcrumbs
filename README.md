# Breadcrumbs

A navigation breadcrumb component for Laravel applications. Shows the current page location within a hierarchy. Works with Livewire and Vue 3.

## Installation

```bash
composer require mrshanebarron/breadcrumbs
```

## Livewire Usage

### Basic Usage

```blade
<livewire:sb-breadcrumbs :items="[
    ['label' => 'Home', 'href' => '/'],
    ['label' => 'Products', 'href' => '/products'],
    ['label' => 'Electronics', 'href' => '/products/electronics'],
    ['label' => 'Laptops']
]" />
```

### Different Separators

```blade
<!-- Chevron (default) -->
<livewire:sb-breadcrumbs :items="$items" separator="chevron" />

<!-- Slash -->
<livewire:sb-breadcrumbs :items="$items" separator="slash" />

<!-- Custom character -->
<livewire:sb-breadcrumbs :items="$items" separator=">" />
```

### Livewire Props

| Prop | Type | Default | Description |
|------|------|---------|-------------|
| `items` | array | required | Array of breadcrumb items |
| `separator` | string | `'chevron'` | Separator style: `chevron`, `slash`, or custom |

### Item Structure

```php
[
    'label' => 'Page Name',     // Required: Display text
    'href' => '/path',          // Optional: Link URL (omit for current page)
    'icon' => '<svg>...</svg>'  // Optional: Icon HTML
]
```

## Vue 3 Usage

### Setup

```javascript
import { SbBreadcrumbs } from './vendor/sb-breadcrumbs';
app.component('SbBreadcrumbs', SbBreadcrumbs);
```

### Basic Usage

```vue
<template>
  <SbBreadcrumbs :items="breadcrumbs" />
</template>

<script setup>
const breadcrumbs = [
  { label: 'Home', href: '/' },
  { label: 'Products', href: '/products' },
  { label: 'Current Item' }
];
</script>
```

### With Home Icon

```vue
<template>
  <SbBreadcrumbs :items="breadcrumbs" />
</template>

<script setup>
const homeIcon = `<svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20">
  <path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z"/>
</svg>`;

const breadcrumbs = [
  { label: 'Home', href: '/', icon: homeIcon },
  { label: 'Dashboard', href: '/dashboard' },
  { label: 'Settings' }
];
</script>
```

### Separator Options

```vue
<template>
  <!-- Chevron separator (default) -->
  <SbBreadcrumbs :items="items" separator="chevron" />

  <!-- Slash separator -->
  <SbBreadcrumbs :items="items" separator="slash" />

  <!-- Custom separator -->
  <SbBreadcrumbs :items="items" separator=">" />
  <SbBreadcrumbs :items="items" separator="|" />
</template>
```

### Dynamic Breadcrumbs

```vue
<template>
  <SbBreadcrumbs :items="breadcrumbs" />
</template>

<script setup>
import { computed } from 'vue';
import { useRoute } from 'vue-router';

const route = useRoute();

const breadcrumbs = computed(() => {
  const items = [{ label: 'Home', href: '/' }];

  const paths = route.path.split('/').filter(Boolean);
  let currentPath = '';

  paths.forEach((segment, index) => {
    currentPath += `/${segment}`;
    items.push({
      label: segment.charAt(0).toUpperCase() + segment.slice(1),
      href: index < paths.length - 1 ? currentPath : undefined
    });
  });

  return items;
});
</script>
```

### Vue Props

| Prop | Type | Default | Description |
|------|------|---------|-------------|
| `items` | Array | required | Breadcrumb items array |
| `separator` | String | `'chevron'` | Separator type |

### Item Object

| Property | Type | Required | Description |
|----------|------|----------|-------------|
| `label` | String | Yes | Display text |
| `href` | String | No | Link URL |
| `icon` | String | No | HTML icon string |

## Features

- **Multiple Separators**: Chevron, slash, or custom
- **Icon Support**: Add icons to any breadcrumb item
- **Auto Current Page**: Last item styled as current (no link)
- **Accessible**: Proper `aria-label` and `aria-current`

## Styling

Uses Tailwind CSS:
- Gray text for links
- Darker text on hover
- Black text for current page
- Smooth color transitions

## Accessibility

- `nav` element with `aria-label="Breadcrumb"`
- `aria-current="page"` on last item
- Semantic `ol` list structure

## Requirements

- PHP 8.1+
- Laravel 10, 11, or 12
- Tailwind CSS 3.x

## License

MIT License
