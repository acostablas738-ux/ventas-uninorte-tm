<?php

// La clase Usuario hereda las funciones de la clase Conectar
class Usuario extends Conectar
{
    // Obtiene todos los usuarios activos de la base de datos
    public function get_usuario()
    {
        $conectar = parent::conexion();
        parent::set_names();

        // CORREGIDO: Se cambió tm_producto por tm_usuario
        $sql = "SELECT * FROM tm_usuario WHERE est = 1";

        $sql = $conectar->prepare($sql);
        $sql->execute();
        return $resultado = $sql->fetchAll();
    }

    // Obtiene un usuario específico mediante su ID
    public function get_usuario_x_id($usuario_id)
    {
        $conectar = parent::conexion();
        parent::set_names();

        $sql = "SELECT * FROM tm_usuario WHERE usuario_id = ?";
        $sql = $conectar->prepare($sql);
        $sql->bindValue(1, $usuario_id);
        $sql->execute();
        return $resultado = $sql->fetchAll();
    }

    // Elimina (lógicamente) un usuario según su ID
    public function delete_usuario($usuario_id)
    {
        $conectar = parent::conexion();
        parent::set_names();

        // CORREGIDO: Se eliminó el código duplicado y se apuntó correctamente a tm_usuario y usuario_id
        $sql = "UPDATE tm_usuario SET
                    est = 0,
                    fech_elim = now()
                WHERE
                    usuario_id = ?";

        $sql = $conectar->prepare($sql);
        $sql->bindValue(1, $usuario_id);
        $sql->execute();
        return $resultado = $sql->fetchAll();
    }

    // Inserta un nuevo usuario (ahora recibe todos los datos necesarios)
    public function insert_usuario($user_nom, $user_usuario, $user_contra)
    {
        $conectar = parent::conexion();
        parent::set_names();

        $sql = "INSERT INTO tm_usuario (usuario_id, user_nom, user_usuario, user_contra, fech_crea, fech_modi, fech_elim, est)
                VALUES (NULL, ?, ?, ?, now(), NULL, NULL, 1)";

        $sql = $conectar->prepare($sql);
        
        // CORREGIDO: Se enlazan los 3 parámetros que requiere la consulta
        $sql->bindValue(1, $user_nom);
        $sql->bindValue(2, $user_usuario);
        $sql->bindValue(3, $user_contra);

        $sql->execute();
        return $resultado = $sql->fetchAll();
    }

    // Actualiza un usuario existente
    public function update_usuario($usuario_id, $user_nom, $user_usuario, $user_contra)
    {
        $conectar = parent::conexion();
        parent::set_names();

        // CORREGIDO: Tabla correcta (tm_usuario) y columnas correspondientes de usuario
        $sql = "UPDATE tm_usuario
            SET
                user_nom = ?,
                user_usuario = ?,
                user_contra = ?,
                fech_modi = now()
            WHERE
                usuario_id = ?";

        $sql = $conectar->prepare($sql);
        
        // CORREGIDO: Asignación exacta de los 4 parámetros (3 de datos + 1 del ID)
        $sql->bindValue(1, $user_nom);
        $sql->bindValue(2, $user_usuario);
        $sql->bindValue(3, $user_contra);
        $sql->bindValue(4, $usuario_id);

        $sql->execute();
        return $resultado = $sql->fetchAll();
    }
}

?>