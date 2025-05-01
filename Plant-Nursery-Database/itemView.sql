CREATE VIEW ItemView AS
SELECT 
    i.itemId AS iId,
    i.itemName AS ItemName,
    SUM(si.quantity) AS NoOfBoxes,
    i.itemPrice AS ItemPrice,
    SUM(si.quantity * i.itemPrice) AS ItemRevenue,
    COUNT(DISTINCT c.customerId) AS ItemCustomers
FROM 
    items i
JOIN 
    shop_items si ON i.itemId = si.itemId
JOIN 
    shops s ON si.shopId = s.shopId
JOIN 
    customers c ON s.shopId = c.shopId
GROUP BY 
    i.itemId, i.itemName, i.itemPrice;

SELECT * FROM ItemView;