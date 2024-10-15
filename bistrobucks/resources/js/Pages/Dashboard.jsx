import React from "react";
import { Box,HStack } from "@chakra-ui/react";
import Sidebar from "../../js/Layouts/Sidebar";
import Header from "@/Layouts/Header";

export default function Dashboard() {
    return (
        <>
            <Box >
                <Header />
                <HStack>
                    <Sidebar />
                    <p>aaaa</p>
                </HStack>
            </Box>
        </>
    );
}
