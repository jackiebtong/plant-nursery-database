# Plant Nursery Management System
MySQL database for tracking prices, customers, and other store operations.


**Tools**: MySQL 
**Key Features**:
- 10+ normalized tables (3NF) for inventory, sales, suppliers
- Automated monthly sales reports via stored procedures
- Dynamic querying for seasonal trends

## Database Schema in Schema.pdf

## Sample Query
'''DROP VIEW IF EXISTS itemview;
CREATE VIEW itemview AS
SELECT 
    i.iId AS iId,
    i.Iname AS ItemName,
    SUM(oi.Icount) AS NoOfBoxes,
    i.Sprice AS ItemPrice,
    SUM(oi.Icount * i.Sprice) AS ItemRevenue,
    COUNT(DISTINCT o.cId) AS ItemCustomers
FROM 
    ITEM_1 i
JOIN 
    ORDER_ITEM oi ON i.iId = oi.iId
JOIN 
    ORDERS o ON oi.oId = o.oId
JOIN 
    SHOP_1 s ON o.sId = s.sId
JOIN 
    SHOP_CUSTOMER sc ON s.sId = sc.sId
JOIN 
    CUSTOMER c ON sc.cId = c.cId
GROUP BY 
    i.iId, i.Iname, i.Sprice;
'''

**Skills Demonstrated**:  
- Database design (3NF normalization)  
- Query optimization (indexing, JOINs)
- Inventory management principles
