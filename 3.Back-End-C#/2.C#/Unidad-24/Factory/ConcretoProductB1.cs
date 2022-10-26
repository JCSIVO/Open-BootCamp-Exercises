public class ConcretoProductB1 : IAbstractProductB
{
    public string MetodoB()
    {
        return "Desde MetodoB en ProductB1";
    }
    public string OtroMetodoB(IAbstractProductA colaborador)
    {
        var resultado = colaborador.MetodoA();
        return $"El resultado de la colaboración con A es: { resultado } DEsde ConcretoProductB1";
    }
}