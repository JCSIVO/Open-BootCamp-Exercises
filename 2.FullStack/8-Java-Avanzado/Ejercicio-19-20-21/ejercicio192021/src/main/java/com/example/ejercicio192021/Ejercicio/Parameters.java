package com.example.ejercicio192021.Ejercicio;

public enum Parameters {

    /*
     * El segundo parametro de enumeracion (true o false) indica 
     * si el parametro es de tipo clave (true) o indicador (false)
     */

    PARAM_MAX_VALUE("--maxvalue",true),
    PARAM_MIN_VALUE("--minvalue",true),
    PARAM_HASHCODE("--hashcode",true),
    PARAM_COMPRESS("--compress",false),
    PARAM_SERVICE_URL("--compress",true),
    PARAM_SERVICE_USER("--user",true),
    PARAM_SERVICE_USER_ROLE("--role",true);

    private final String paramName;
    private final boolean keyValueParam;

    private Parameters(String paramName, boolean keyValueParam) {
        this.paramName = paramName;
        this.keyValueParam = keyValueParam;
    }

    public boolean isKeyValueParam() {
        return keyValueParam;
    }

    public String getParamName() {
        return paramName;
    }
}
