import { useState } from 'react'
import reactLogo from './assets/react.svg'
import viteLogo from '/vite.svg'
import './App.css'
import ProductList from './components/products/ProductsList';

function App() {
  const products = [
    { id: 1, name: 'Product 1', price: '$20', image: 'product1.jpg' },
    { id: 2, name: 'Product 2', price: '$25', image: 'product2.jpg' },
    // Add more products as needed
  ];

  const [count, setCount] = useState(0)

  return (
    <div>
    <h1>Welcome to our E-commerce Store</h1>
    <ProductList products={products} />
  </div>
  )
}

export default App
