namespace Factory
{

public class ConcretoFactory1 : IAbstractFactory
{
    public IAbstractProductA CreateProductA()
    {
        return new ConcretoProductA1();
    }
    public IAbstractProductB CreateProductB()
    {
        return new ConcretoProductB1();
    }
}
}