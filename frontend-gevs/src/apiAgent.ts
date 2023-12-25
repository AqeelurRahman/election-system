import axios from 'axios'
import { useAuthStore } from './stores/auth'
const instance = axios.create({
  baseURL: import.meta.env.VITE_BASE_URL,
  timeout: 30000, // Set a timeout (optional)
  headers: {
    'Content-Type': 'application/json' // Set common headers here
  }
})

const store = useAuthStore()
// Request interceptor to add auth header.
instance.interceptors.request.use(function (config) {
  debugger
  const token = store.getToken
  if (token) {
    config.headers.Authorization = `Bearer ${token}`
  } else {
    config.headers.Authorization = null
    /*if setting null does not remove `Authorization` header then try
        delete axios.defaults.headers.common['Authorization'];
      */
  }
  return config
})

export const RegisterApiCall = (formData: any) => instance.post('/login', formData)
