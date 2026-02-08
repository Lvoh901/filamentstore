-- amenities --
INSERT INTO amenities (name, description) VALUES
('Free Wi-Fi', 'High-speed wireless internet available in the room', NOW(), NOW()),
('Air Conditioning', 'Individually controlled air conditioning for comfort', NOW(), NOW()),
('Flat-Screen TV', 'Modern flat-screen television with satellite channels', NOW(), NOW()),
('Mini Bar', 'In-room mini bar stocked with beverages and snacks', NOW(), NOW()),
('Room Safe', 'Electronic safe for storing valuables securely', NOW(), NOW()),
('Tea & Coffee Maker', 'Electric kettle with complimentary tea and coffee', NOW(), NOW()),
('Work Desk', 'Dedicated workspace with desk and chair', NOW(), NOW()),
('Wardrobe', 'Spacious wardrobe with hangers and luggage rack', NOW(), NOW()),
('Private Bathroom', 'En-suite bathroom with shower and hot water', NOW(), NOW()),
('Hair Dryer', 'Hair dryer provided in the bathroom', NOW(), NOW()),
('Iron & Ironing Board', 'Iron and ironing board available in the room', NOW(), NOW()),
('Telephone', 'In-room telephone with internal and external dialing', NOW(), NOW()),
('Soundproofing', 'Soundproofed room for reduced external noise', NOW(), NOW()),
('Balcony', 'Private balcony with outdoor seating', NOW(), NOW()),
('Daily Housekeeping', 'Room cleaned and refreshed daily by housekeeping', NOW(), NOW());

-- rooms --
INSERT INTO rooms (room_number, type, price, status, created_at, updated_at) VALUES
('101', 'Standard Single', 1500, 'available', NOW(), NOW()),
('102', 'Standard Double', 2500, 'available', NOW(), NOW()),
('103', 'Standard Twin', 3000, 'occupied', NOW(), NOW()),
('104', 'Deluxe Single', 4000, 'available', NOW(), NOW()),
('105', 'Deluxe Double', 5000, 'maintenance', NOW(), NOW()),
('201', 'Executive Room', 6500, 'available', NOW(), NOW()),
('202', 'Executive Room', 7000, 'occupied', NOW(), NOW()),
('203', 'Junior Suite', 8000, 'available', NOW(), NOW()),
('301', 'Suite', 9000, 'available', NOW(), NOW()),
('302', 'Presidential Suite', 10000, 'occupied', NOW(), NOW());

-- services --
INSERT INTO services (name, description, price, created_at, updated_at) VALUES
('Room Service', 'In-room food and beverage delivery on request', 500, NOW(), NOW()),
('Laundry Service', 'Washing, drying, and ironing of guest clothing', 800, NOW(), NOW()),
('Airport Transfer', 'Private airport pickup or drop-off service', 3000, NOW(), NOW()),
('Spa & Massage', 'Relaxing full-body massage and spa treatment', 4500, NOW(), NOW()),
('Gym Access', 'Unlimited access to the hotel fitness center', 1000, NOW(), NOW()),
('Swimming Pool Access', 'Access to the hotel swimming pool and loungers', 700, NOW(), NOW()),
('Conference Room', 'Use of conference room with basic amenities', 5000, NOW(), NOW()),
('Car Hire', 'On-demand vehicle rental with or without driver', 4000, NOW(), NOW()),
('Guided City Tour', 'Guided tour of nearby attractions and landmarks', 3500, NOW(), NOW()),
('Late Check-out', 'Extended room usage beyond standard checkout time', 1500, NOW(), NOW());

