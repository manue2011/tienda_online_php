# 🛒 Tienda Online Avanzada

<div align="left">
  <img src="https://skillicons.dev/icons?i=php,mysql,html,css,vscode" />
</div>

<br>

Proyecto de desarrollo web backend que implementa una tienda online funcional con sistema de usuarios y filtrado de datos. [cite_start]Desarrollado como parte de la práctica "Tienda Online Avanzada"[cite: 1].

## 🚀 Funcionalidades Principales

El sistema cuenta con tres módulos principales requeridos en la especificación del proyecto:

### 1. Búsqueda Avanzada de Productos 🔍
[cite_start]Sistema de filtrado dinámico que permite a los usuarios encontrar productos específicos.
* [cite_start]**Filtros personalizados:** Búsqueda por categorías, rangos de precio y otros atributos.
* [cite_start]**Validación:** Campos obligatorios y opcionales gestionados en el backend[cite: 4].
* [cite_start]**Reset:** Botón para limpiar el formulario y volver al estado inicial[cite: 5, 6].

### 2. Autenticación de Usuarios (Login) 🔐
[cite_start]Sistema de seguridad para proteger el acceso a datos personales[cite: 8].
* [cite_start]**Base de Datos Relacional:** Validación de credenciales contra una tabla de usuarios MySQL[cite: 9, 10, 11].
* [cite_start]**Manejo de Errores:** Feedback visual cuando las credenciales son inválidas[cite: 12].
* [cite_start]**Perfil de Usuario:** Visualización de datos personales (Nombre, DNI, Email) tras el login exitoso[cite: 10, 11].

### 3. Gestión de Perfil (CRUD) ✏️
Capacidad para que los usuarios autenticados administren su información.
* [cite_start]**Actualización de Datos:** Formulario para modificar información personal (como el email) directamente en la base de datos[cite: 18].
* [cite_start]**Navegación:** Flujo intuitivo con opciones para volver a la página principal desde cualquier sección[cite: 19].

---

## 🛠️ Instalación y Despliegue

Para probar este proyecto en local:

1.  Clona el repositorio.
2.  [cite_start]Importa el archivo `.sql` incluido en la carpeta `database/` para generar las tablas y datos de prueba.
3.  Configura tu servidor local (XAMPP/WAMP) y ajusta las credenciales de conexión en `conexion.php`.

---

## 📸 Capturas de Pantalla

*(Aquí puedes subir tus propias imágenes del login o el buscador)*
