import { ref } from 'vue'

export function useFormTabs() {
  const currentTab = ref('Login')

  return {
    currentTab
  }
}
