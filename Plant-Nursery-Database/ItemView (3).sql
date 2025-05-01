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
WHERE 
    i.Iname = 'item_1'
GROUP BY 
    i.iId, i.Iname, i.Sprice;