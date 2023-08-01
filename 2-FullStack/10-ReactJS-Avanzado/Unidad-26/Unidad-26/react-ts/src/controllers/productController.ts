import axios, { AxiosResponse } from "axios";

export const getProducts = async () => {
const res: AxiosResponse = await axios.get("https://fakestoreapi.com/products");
return res;
};
