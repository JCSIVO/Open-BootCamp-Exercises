

public class OperationLogger
{
    private readonly ITransientOperation _transientOperation;
    private readonly IScopeOperation _scopeOperation;
    private readonly ISingletonOperation _singletonOperation;

    public OperationLogger( 
        
        ITransientOperation transientOperation,
        IScopeOperation scopeOperation,
        ISingletonOperation singletonOperation) =>
            ( _transientOperation, _scopeOperation, _singletonOperation) = 
            (transientOperation, scopeOperation, singletonOperation);

    public void LogOperation(string scope)
    {
        LogOperation(_transientOperation, scope, "Desde TransientOperation");
        LogOperation(_scopeOperation, scope, "Desde ScopeOperation");
        LogOperation(_singletonOperation , scope, "Desde SingletonOperation");
    }
    private static void LogOperation<T>(T operation, string scope, string msg)
    where T : IOperation =>
        Console.WriteLine(
            $"{scope}:{typeof(T).Name} [{ operation.OperationId } - {msg}]"
        );

}