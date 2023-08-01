import React from 'react'
import PropTypes from 'prop-types'

import { ErrorMessage, Field, Form, Formik } from 'formik';
import * as Yup from 'yup';

import { Redirect } from 'react-router-dom';

const loginSchema = Yup.object().shape(
    {
        email: Yup.string()
                .email('Invalid email format')
                .required('Email is required'),
        password: Yup.string()
                .required('Password is required')
    }
);

const LoginForm = ({loged, fetching, onLogin}) => {

    const initialCredentials ={
        email: '',
        password: ''
    }

    return (
    <Formik
            // *** Initial values that the form will take
            initialValues={initialCredentials}
            // *** Yup validation Schema ***
            validationSchema = {loginSchema}
            // *** onSubmit Event
            onSubmit={async (values) => {
                onLogin(values.email, values.password)
            }}
            >
            {/* We obtain Props from Formik  */ }
            {({ values,
                touched,
                errors,
                isSubmitting,
                handleChange,
                handleBlur}) => (
                    <Form>
                        <label htmlFor="email">Email</label>
                        <Field id="email" type="email" name="email" placeholder="example@email.com"></Field>

                        {/* Email Errors */}
                        {
                            errors.email && touched.email &&
                            (
                                <ErrorMessage name="email" component='div'></ErrorMessage>
                            )
                        }
                        <label htmlFor='password'>Password</label>
                        <Field
                            id="password"
                            name="password"
                            placeholder="password"
                            type='password'
                        ></Field>
                        {/* Password Erros */}
                        {
                            errors.password && touched.password && 
                            (
                                <ErrorMessage name='password' component='div'></ErrorMessage>
                            )
                        }
                        <button type="submit">Login</button>
                        { fetching ? (<p>LOADING...</p>) : null }
                        {isSubmitting ? (<p>Login Your Credentials...</p>) : null}
                    </Form>
                )}
    </Formik>
    )
}

LoginForm.propTypes = {
    loged: PropTypes.bool.isRequired,
    fetching: PropTypes.bool.isRequired,
    onLogin: PropTypes.func.isRequired

}

export default LoginForm

