public class ConcretoProductB2 : IAbstractProductB
{
    public string MetodoB()
    {
        return "Desde MetodoB en ProductB2";
    }
    public string OtroMetodoB(IAbstractProductA colaborador)
    {
        var resultado = colaborador.MetodoA();
        return $"El resultado de la colaboración con A es: { resultado }desde ConcretoProductB2";
    }
}