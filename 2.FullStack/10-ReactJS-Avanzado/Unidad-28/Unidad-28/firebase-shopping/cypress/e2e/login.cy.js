/// <reference types="cypress" />

import { deleteTestUser } from "../../src/firebase/usersController";


describe('Testeamos la gestión de usuarios', () => {
  beforeEach(() => {
      cy.visit('http://localhost:3000')
  })
  it('Se renderiza correctamente', () => {
      cy.contains('FireShopping v2')
  })
  it('Podemos acceder a la ruta de Login', () => {
    cy.contains('Este es en login').should('not.exist')
    cy.contains('Login').click()
    cy.contains('Este es el login')
  })
  it('Podemos acceder a la ruta de Resgistrarse', () => {
    const registerTitle = "¡Regístrate para obtener acceso a la mejor app del mundo!";
    cy.contains(registerTitle).should('not.exist')
    cy.contains('...o regístrate').click()
    cy.contains(registerTitle).should('exist')
  })
  it('Podemos registrar un usuario', async () => {
    await deleteTestUser()
    const email = 'fireshopping@email.com'
    const password = 'fireshopping@email.com'
    cy.contains('...o regístrate').click()
    cy.get('input[placeholder="Email"]').type(email)
    cy.get('input[placeholder="Password"]').type(password)
    // cy.get('button.submit-button').click()
    // cy.contains('Esta es la home').should('exist')
  })
  it('Podemos iniciar sesión', () => {
    const email = 'fireshopping@email.com'
    const password = 'fireshopping@email.com'
    cy.contains('Login').click()
    cy.get('input[placeholder="Email"]').type(email)
    cy.get('input[placeholder="Password"]').type(password)
    cy.get('button.submit-button').click()
    cy.contains('Logout').should('exist')
  })
});

describe('Testeamos la aplicación de notas', () => {
  beforeEach(() => {
    cy.visit('http://localhost:3000')
    cy.get('div.list-route').click()
})
  it('Aparece texto si no estamos logueados', () => {
    const text = "Necesitas estar logueado para pdder leer y añadir tareas"
    cy.contains(text)
  })
  it('No podemos escribirni el título ni la descripción', () => {
    cy.get('input[placeholder="Título"]').should('be.disabled')
    cy.get('textarea[placeholder="Descripción"]').should('be.disabled')
    cy.get('button.submit-button').should('be.disabled')
  })
  it('Estando logueados, el titulo, la descripcion y el boton de envío estan activos', () => {
    // Primero hacemos login
    const email = 'fireshopping@email.com'
    const password = 'fireshopping@email.com'
    cy.contains('Login').click()
    cy.get('input[placeholder="Email"]').type(email)
    cy.get('input[placeholder="Password"]').type(password)
    cy.get('button.submit-button').click()
    cy.contains('Inicio de sesión válido')

    // Entra en la ruta del listado
    cy.get('div.list-route').click()
    cy.get('input[placeholder="Título"]').should('be.enabled')
    cy.get('textarea[placeholder="Descripción"]').should('be.enabled')
    cy.get('button.submit-button').should('be.enabled')
  })
});

