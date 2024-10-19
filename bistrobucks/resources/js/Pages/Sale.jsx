import React from "react";
import {
    Table,
    Thead,
    Tbody,
    Tr,
    Th,
    Td,
    Heading,
} from "@chakra-ui/react";

const Sale = ({ sales, saleDetails }) => {
    return (
        <>
            <Heading as="h1" size="lg" mb={4}>
                Sale一覧
            </Heading>
            <Table variant="simple">
                <Thead>
                    <Tr>
                        <Th>id</Th>
                        <Th>shopId</Th>
                        <Th>taxRateId</Th>
                        <Th>totalSaleAmount</Th>
                        <Th>discountAmount</Th>
                    </Tr>
                </Thead>
                <Tbody>
                    {sales.map((sale) => (
                        <Tr key={sale.id}>
                            <Td>{sale.id}</Td>
                            <Td>{sale.shop_id}</Td>
                            <Td>{sale.total_sale_amount}</Td>
                            <Td>{sale.discount_amount}</Td>
                            <Td>{sale.discount_amount}</Td>
                            <Td>{sale.discount_amount}</Td>
                        </Tr>
                    ))}
                </Tbody>
            </Table>
            <Heading as="h1" size="lg" mt={8} mb={4}>
                Sale Details一覧
            </Heading>
            <Table variant="simple">
                <Thead>
                    <Tr>
                        <Th>id</Th>
                        <Th>product_id</Th>
                        <Th>quantity</Th>
                        <Th>price</Th>
                    </Tr>
                </Thead>
                <Tbody>
                    {saleDetails.map((saleDetail) => (
                        <Tr key={saleDetail.id}>
                            <Td>{saleDetail.id}</Td>
                            <Td>{saleDetail.product_id}</Td>
                            <Td>{saleDetail.quantity}</Td>
                            <Td>{saleDetail.price}</Td>
                        </Tr>
                    ))}
                </Tbody>
            </Table>
        </>
    );
};

export default Sale;
