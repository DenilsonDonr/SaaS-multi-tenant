/// <reference types="vite/client" />

interface ImportMetaEnv {
  readonly VITE_APP_NAME: string
  // Añade más variables de entorno aquí si las necesitas
}

interface ImportMeta {
  readonly env: ImportMetaEnv
}
