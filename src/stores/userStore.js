// src/stores/userStore.js
import {defineStore} from 'pinia'

export const useUserStore = defineStore('user', {
	state:   () => ({
		user:  null,
		token: null,
	}),
	actions: {
		setUser(user) {
			this.user = user
			localStorage.setItem('user', JSON.stringify(user))
		},
		setToken(token) {
			this.token = token
			localStorage.setItem('token', token)
		},
		logout() {
			this.user  = null
			this.token = null
			localStorage.removeItem('user')
			localStorage.removeItem('token')
		},
		initFromStorage() {
			const token = localStorage.getItem('token')
			const user = localStorage.getItem('user')

			if (token) {
				this.token = token
			}

			if (user && user !== 'undefined') {
				try {
					this.user = JSON.parse(user)
				} catch (e) {
					this.user = null
					localStorage.removeItem('user') // очистим некорректное значение
				}
			}
		},
		async validateToken() {
			try {
				const response = await fetch('https://laravel-api-gmjs.onrender.com/api/user', {
					headers: {
						Authorization: `Bearer ${this.token}`,
						Accept:        'application/json',
					}
				})

				if (!response.ok) {
					throw new Error()
				}
				this.user = await response.json()
			} catch {
				this.logout()
			}
		}
	}
})
