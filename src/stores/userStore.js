// src/stores/userStore.js
import {defineStore} from 'pinia'

export const useUserStore = defineStore('user', {
	state: () => ({
		user:  null,
		token: localStorage.getItem('auth_token') || null,
	}),

	getters: {
		isAuthenticated: (state) => !!state.token,
	},

	actions: {
		setUser(userData) {
			this.user = userData
		},
		setToken(token) {
			this.token = token
			localStorage.setItem('auth_token', token)
		},
		logout() {
			this.user  = null
			this.token = null
			localStorage.removeItem('auth_token')
		},
		fetchUser() {
			if (!this.token) {
				return
			}
			return fetch('http://127.0.0.1:8000/api/user', {
				headers: {
					'Authorization': 'Bearer ' + this.token,
					'Accept':        'application/json'
				}
			})
				.then(async (res) => {
					if (!res.ok) {
						throw new Error('Недействительный токен')
					}
					const data = await res.json()
					this.setUser(data)
				})
				.catch((err) => {
					console.warn('fetchUser error:', err)
					this.logout()
				})
		}

	}
})
