import { List, ListItem, ListItemIcon, ListItemText } from '@mui/material';
import { useHistory } from 'react-router-dom';

import {Home, Settings} from '@mui/icons-material';

const getIcon = (icon) => {
    switch (icon) {
        case 'HOME':
            return (<Home/>)
        case 'TASKS':
            return (<Home/>)
        case 'SETTINGS':
            return (<Settings/>)
        default:
            return (<Home/>)
    }
}

const MenuListItems = ({list}) => {

    const history = useHistory();

    const navigateTo = (path) => {
        history.push(path)
    }

    return (

        <List>
            {list.map(({text, path, icon}, index) => 
                (
                    <ListItem key={index} button onClick={() => navigateTo(path)}>
                        <ListItemIcon>
                            {getIcon(icon)}
                        </ListItemIcon>
                        <ListItemText 
                            primary={text}
                        />
                    </ListItem>
                )
            )}
        </List>
    )
}

export default MenuListItems;
