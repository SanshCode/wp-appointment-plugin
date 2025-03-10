import React, { useState } from "react";
import "./App.css";

function App() {
  const [selectedDate, setSelectedDate] = useState("");
  const [selectedSlot, setSelectedSlot] = useState("");
  const [email, setEmail] = useState("");
  const [phone, setPhone] = useState("");

  const timeSlots = [
    "10:00 AM", "11:00 AM", "12:00 PM",
    "02:00 PM", "03:00 PM", "04:00 PM",
  ];

  const handleSubmit = (e) => {
    e.preventDefault();
    // We'll later call API to book
    alert(`Booked for ${selectedDate} at ${selectedSlot}`);
  };

  return (
    <div className="booking-container">
      <h2>Book an Appointment</h2>

      <form onSubmit={handleSubmit}>
        <div className="form-group">
          <label>Select Date:</label>
          <input
            type="date"
            value={selectedDate}
            onChange={(e) => setSelectedDate(e.target.value)}
            required
          />
        </div>

        <div className="form-group">
          <label>Select Time Slot:</label>
          <div className="slots">
            {timeSlots.map((slot) => (
              <button
                type="button"
                key={slot}
                className={`slot-btn ${selectedSlot === slot ? "selected" : ""}`}
                onClick={() => setSelectedSlot(slot)}
              >
                {slot}
              </button>
            ))}
          </div>
        </div>

        <div className="form-group">
          <label>Email:</label>
          <input
            type="email"
            value={email}
            onChange={(e) => setEmail(e.target.value)}
            required
          />
        </div>

        <div className="form-group">
          <label>Phone:</label>
          <input
            type="tel"
            value={phone}
            onChange={(e) => setPhone(e.target.value)}
            required
          />
        </div>

        <button type="submit" className="submit-btn">Book Appointment</button>
      </form>
    </div>
  );
}

export default App;
