namespace Factory
{
public class ConcretoFactory2 : IAbstractFactory 
{
    public IAbstractProductA CreateProductA()
    {
        return new ConcretoProductA2();
    }
    public IAbstractProductB CreateProductB()
    {
        return new ConcretoProductB2();
    }
}
}