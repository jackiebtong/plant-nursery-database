CREATE VIEW ItemView AS
SELECT 
    i.iId AS iId,
    i.Iname AS ItemName,
    SUM(oi.Icount) AS NoOfBoxes,
    i.Sprice AS ItemPrice,
    SUM(oi.Icount * i.Sprice) AS ItemRevenue,
    COUNT(DISTINCT oc.cId) AS ItemCustomers
FROM 
    ITEM i
JOIN 
    ORDER_ITEM oi ON i.iId = oi.iId
JOIN 
    "ORDER" o ON oi.oId = o.oId
JOIN 
    SHOP s ON o.sId = s.sId
JOIN 
    SHOP_CUSTOMER sc ON s.sId = sc.sId
JOIN 
    CUSTOMER c ON sc.cId = c.cId
WHERE 
    i.Iname = 'item_1'
GROUP BY 
    i.iId, i.Iname, i.Sprice;