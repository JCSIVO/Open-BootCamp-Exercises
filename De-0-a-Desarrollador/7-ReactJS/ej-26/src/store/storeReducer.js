//Actions Type//
export const types = {
    CREATE: "CREATE",
    DELETE: "DELETE",
    CHECKED: "CHECKED",
    };

  //Initial state//
    export const initialStore = JSON.parse(sessionStorage.getItem("todos")) || [];

    export const storeReducer = (state, action) => {
    switch (action.type) {    
        case types.CREATE:
        return (state = [...state, action.payload]);
        case types.DELETE:
        return state.filter((todo) => todo.id !== action.payload);    
        case types.CHECKED:
        return state.map((todo) =>
            todo.id === action.payload.id ? action.payload : todo
        );
        default:
        return state;
    }
    };

    export default storeReducer;