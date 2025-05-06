<template>
  <div class="loading-container">
    <div class="loading-spinner">
      <div class="spinner-circle"></div>
      <div class="spinner-circle"></div>
      <div class="spinner-circle"></div>
      <div class="spinner-circle"></div>
      <div class="spinner-circle"></div>
    </div>
    <p class="loading-text">Загрузка данных...</p>
  </div>
</template>

<script>
export default {
  name: 'Loading'
}
</script>

<style scoped>
.loading-container {
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  min-height: 200px;
  padding: 2rem;
}

.loading-spinner {
  display: flex;
  gap: 8px;
  margin-bottom: 1rem;
}

.spinner-circle {
  width: 20px;
  height: 20px;
  border-radius: 50%;
  animation: bounce 0.5s ease-in-out infinite;
}

.spinner-circle:nth-child(1) {
  background-color: #27AAE1;
  animation-delay: 0s;
}

.spinner-circle:nth-child(2) {
  background-color: #F7941D;
  animation-delay: 0.1s;
}

.spinner-circle:nth-child(3) {
  background-color: #FFE38E;
  animation-delay: 0.2s;
}

.spinner-circle:nth-child(4) {
  background-color: #DDDDFF;
  animation-delay: 0.3s;
}

.spinner-circle:nth-child(5) {
  background-color: #B8EFCF;
  animation-delay: 0.4s;
}

.loading-text {
  font-family: regular;
  font-size: 1.2rem;
  background: linear-gradient(45deg, #27AAE1, #F7941D);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  margin: 0;
  animation: pulse 1.5s ease-in-out infinite;
}

@keyframes bounce {
  0%, 100% {
    transform: translateY(0);
  }
  50% {
    transform: translateY(-10px);
  }
}

@keyframes pulse {
  0%, 100% {
    opacity: 1;
  }
  50% {
    opacity: 0.5;
  }
}
</style> 