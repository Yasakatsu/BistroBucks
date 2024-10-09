import React from "react";
import { Box, Flex } from "@chakra-ui/react";
import Sidebar from "../Components/Sidebar";

const Dashboard = () => {
    return (
        <Flex>
            <Sidebar />
            <Box flex="1" p={6}></Box>
        </Flex>
    );
};

export default Dashboard;
