import { createContext, useReducer } from "react";
import { storeReducer, initialStore, types } from "./storeReducer";

export const StoreContext = createContext();

export const StoreProvider = ({ children }) => {
    const [todos, dispatch] = useReducer(storeReducer, initialStore);

    return (
    <StoreContext.Provider value={[todos, dispatch, types]}>
        {children}
    </StoreContext.Provider>
    );
};