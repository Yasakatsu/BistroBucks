import ApplicationLogo from "@/Components/ApplicationLogo";
import { Box, HStack } from "@chakra-ui/react";
import React from "react";

const Header = () => {
    return (
        <>
            <Box bg="gray.100" h={"8vh"}>
                <HStack
                    justifyContent={"space-between"}
                    alignItems={"center"}
                    h="100%"
                >
                    <Box ml={8} h="100%" display="flex" alignItems="center">
                        <ApplicationLogo />
                    </Box>
                    <Box></Box>
                    <Box mr={4}>My Profile</Box>
                </HStack>
            </Box>
        </>
    );
};

export default Header;
