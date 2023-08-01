import { combineReducers } from "redux";
import { filterReducer } from "./filterReducer";
import { todosReducer } from "./todosReducer";
import { userReducer } from "./userReducer";



export const rootReducer = combineReducers(
    {
        //state name : reducer that will control it
        todosState: todosReducer,
        filterState: filterReducer,
        // ASYNC Example (LOGIN USER)
        userState: userReducer
        //... add more status and reducers to include them in the store
    }
)