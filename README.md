# 🛒 Tienda Online Avanzada

<div align="left">
  <img src="https://skillicons.dev/icons?i=php,mysql,html,css,vscode" />
</div>

<br>

Proyecto de desarrollo web backend que implementa una tienda online funcional con sistema de usuarios y filtrado de datos. Desarrollado como parte de la práctica "Tienda Online Avanzada".

## 🚀 Funcionalidades Principales

El sistema cuenta con tres módulos principales requeridos en la especificación del proyecto:

### 1. Búsqueda Avanzada de Productos 🔍
Sistema de filtrado dinámico que permite a los usuarios encontrar productos específicos.
* **Filtros personalizados:** Búsqueda por categorías, rangos de precio y otros atributos.
* **Validación:** Campos obligatorios y opcionales gestionados en el backend.
* **Reset:** Botón para limpiar el formulario y volver al estado inicial.

### 2. Autenticación de Usuarios (Login) 🔐
Sistema de seguridad para proteger el acceso a datos personales.
* **Base de Datos Relacional:** Validación de credenciales contra una tabla de usuarios MySQL.
* **Manejo de Errores:** Feedback visual cuando las credenciales son inválidas.
* **Perfil de Usuario:** Visualización de datos personales (Nombre, DNI, Email) tras el login exitoso.

### 3. Gestión de Perfil (CRUD) ✏️
Capacidad para que los usuarios autenticados administren su información.
* **Actualización de Datos:** Formulario para modificar información personal (como el email) directamente en la base de datos.
* **Navegación:** Flujo intuitivo con opciones para volver a la página principal desde cualquier sección.

---

## 🛠️ Instalación y Despliegue

Para probar este proyecto en local:

1.  Clona el repositorio.
2.  Importa el archivo `.sql` incluido en la carpeta `database/` para generar las tablas y datos de prueba.
3.  Configura tu servidor local (XAMPP/WAMP) y ajusta las credenciales de conexión en `conexion.php`.

---

## 📸 Capturas de Pantalla

*(Aquí puedes subir tus propias imágenes del login o el buscador)*
