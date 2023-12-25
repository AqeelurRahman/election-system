import { defineStore } from 'pinia'

interface AuthState {
  token: any
  user: any
}

export const useAuthStore = defineStore({
  id: 'AuthStore',
  state: (): AuthState => ({ token: null, user: null }),
  actions: {
    CreateAuth(obj: AuthState) {
      this.token = obj.token
      this.user = obj.user
    }
  },
  getters: {
    getToken: (state) => state.token,
    getUser: (state) => state.user
  }
})
