import { BrowserRouter as Router, Route, Switch, Redirect } from 'react-router-dom';

import Loginpage from './pages/auth/LoginPage';
import Dashboardpage from './pages/dashboard/DashBoard';
import Notfoundpage from './pages/404/NotFoundPage';


function AppRoutingFinal() {

  // TODO: Change to value from sessionStorage (or something dinamic)
  let loggedIn = true;

  return (
    <Router>
      {/* Route Switch */}
      <Switch>
        {/* Redirections to protect our routes */}
        <Route exact path='/'>
          {
           loggedIn ? 
           (<Redirect from='/' to='/dashboard' />)
           :
           (<Redirect from='/' to='/login' /> )
          }
        </Route>
        {/* Login Route */}
        <Route exact path='/login' component={Loginpage} />  
        {/* DashBoard Route */}
        <Route exact path='/dashboard'>
          {
           loggedIn ? 
           (<Dashboardpage />)
           :
           (<Redirect from='/' to='/login' /> )
          }
        </Route>
        <Route component={Notfoundpage}/>
      </Switch>
    </Router>
  );
}

export default AppRoutingFinal;
