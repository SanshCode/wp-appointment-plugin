import React from 'react';
import ReactDOM from 'react-dom/client';
import App from './App';

const container = document.getElementById('ab-booking-app');
if (container) {
  const root = ReactDOM.createRoot(container);
  root.render(<App />);
}
