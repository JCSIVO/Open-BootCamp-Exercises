describe('Testeamos la gestión de usuarios', () => {
    beforeEach(() => {
        cy.visit('http://localhost:300')
    })
    it('Se renderiza correctamente', () => {
        cy.contains('FireShopping v3')
    })
});
