<template>
  <nav aria-label="Breadcrumb">
    <ol class="flex items-center space-x-2">
      <li v-for="(item, index) in items" :key="index" class="flex items-center">
        <template v-if="index > 0">
          <svg v-if="separator === 'chevron'" class="w-4 h-4 text-gray-400 mx-2" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" /></svg>
          <span v-else-if="separator === 'slash'" class="text-gray-400 mx-2">/</span>
          <span v-else class="text-gray-400 mx-2">{{ separator }}</span>
        </template>
        <a v-if="item.href && index < items.length - 1" :href="item.href" class="text-sm font-medium text-gray-500 hover:text-gray-700 transition-colors">
          <span v-if="item.icon" v-html="item.icon"></span>{{ item.label }}
        </a>
        <span v-else class="text-sm font-medium text-gray-900" aria-current="page">
          <span v-if="item.icon" v-html="item.icon"></span>{{ item.label }}
        </span>
      </li>
    </ol>
  </nav>
</template>

<script>
export default {
  name: 'SbBreadcrumbs',
  props: {
    items: { type: Array, required: true },
    separator: { type: String, default: 'chevron' }
  }
};
</script>
