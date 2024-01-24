// routes/index.jsx
import React from 'react';
import { BrowserRouter as Router } from 'react-router-dom';
import HomeRoute from './HomeRoute';
import ProductDetailsRoute from './ProductDetailsRoute';
import ShoppingCartRoute from './ShoppingCartRoute';

const Routes = () => {
  return (
    <Router>
      {/* <Routes> */}
        <HomeRoute />
        <ProductDetailsRoute />
        {/* <ShoppingCartRoute /> */}
      {/* </Routes> */}
    </Router>
  );
};

export default Routes;
