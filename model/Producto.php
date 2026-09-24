<?php
    // LA CLASE PRODUCTO HEREDA LAS FUNCIONES DE LA CLASE CONECTAR
    class Producto extends Conectar
    { 
        //OBTIENE TODOS LOS PRODUCTOS DE LA BASE DE DATOS
        public function get_producto(){
            // ESTABLECE LA CONEXION DE LA BSE DE DATOS
            $conectar = parent::conexion();
            //CODIFICOACION DE CARACTERES
            parent::set_names();
            //CONSULTA SQL PARA OBTENER TODOS LOS PRODUCTOS
            $sql = "SELECT * FROM tm_producto WHERE est = 1";
            //PREPARAR CONSAULTA
            $sql = $conectar->prepare($sql);
            //EJECUTA LA CONSULTA
            $sql->execute();
            //obtiene y retorna todos los registros encontrados
            $resultado = $sql->fetchAll();

            return $resultado;
        }


    }
    ?>