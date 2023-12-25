import { defineStore } from 'pinia'
import { type Register } from '../models/Register'
interface RegisterState {
  email: string
  name: string
  food: null | number
  checked: Array<string>
}

export const useRegisterStore = defineStore({
  id: 'AuthStore',
  state: (): RegisterState => ({
    email: '',
    name: '',
    food: null,
    checked: []
  }),
  actions: {
    CreateRegistration(o: Register) {
      debugger
      this.email = o.email
      this.name = o.name
      this.food = o.food
      this.checked = o.checked
    }
  },
  getters: {
    getName: (state) => state.name,
  }
})
