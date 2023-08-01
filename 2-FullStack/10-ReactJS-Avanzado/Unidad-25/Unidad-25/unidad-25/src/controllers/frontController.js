// Para cambiar de Base de Datos solo hay que comentar una de las dos opciones siguientes 

import { getNotesFromDB } from "./dbController";
// import { getNotesFromDB } from "./dbMockController";

// export const notes = [ "Nota 1", "Nota 2", "Nota 3" ]



export const getNotes = async () => {
    // return notes;
    const notes = await getNotesFromDB();
    return notes;
}