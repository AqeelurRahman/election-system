import { defineStore } from 'pinia'
import { type Register } from '../models/Register'
interface RegisterState {
  email: string
  name: string
  food: null | number
  checked: Array<string>
}

export const useRegisterStore = defineStore({
  id: 'RegisterStore',
  state: (): RegisterState => ({
    email: '',
    name: '',
    food: null,
    checked: []
  }),
  actions: {
    CreateRegistration(o: Register) {
      this.email = o.email
      this.name = o.name
      this.food = o.food
      this.checked = o.checked
    }
  },
  getters: {
    getName: (state) => state.name
  }
})
