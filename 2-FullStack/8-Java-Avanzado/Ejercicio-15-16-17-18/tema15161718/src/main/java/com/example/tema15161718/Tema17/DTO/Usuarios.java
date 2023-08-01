package com.example.tema15161718.Tema17;

import java.util.ArrayList;
 // La ley de METER o la ley de los amigos o la ley de no hablar con extraños indica: 
 // (dentro de un metodo puede tener cuatro tipos de relaciones)
 // Primera Ley -> Un objeto se puede relacionar con su propio objeto
 // Segunda Ley -> Relacionarme con un argumento de mi funcion
 // Tercera Ley -> Relacionarme con un objeto generado dentro de mi propio objeto 
 // Cuarta Ley -> Invocarme a mi mismo 
public class Usuarios {
    // private int contador;
    ArrayList<Usuario> usuarios = new ArrayList();

    //public void mimetodo(int contador) {
        //ArrayList<Integer> lista = new ArrayList();
        //this.contador = contador;
        //lista.add(contador);

        // No permitidio
        // objeto cosa = new cosa();
        // cosa.getValores().get.Elementos.getSuperficiales();
        // Si permitidio -> cosa.valores.elementos.superficiales;
    //}
    public Usuario obtenerUsuario(String name) {
        for (Usuario usuario : usuarios) {
            if (usuario.nombre == name) {
                return usuario;
            }
        }
        return null;
    }
    public void añadirUsuario(Usuario usuario) {
        usuarios.add(usuario);
    }
}
