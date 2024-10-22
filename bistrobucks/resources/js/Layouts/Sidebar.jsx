import React from "react";
import { Stack, Flex, Button } from "@chakra-ui/react";

const Sidebar = () => {
    return (
        <>
            <Flex
                h={{ base: "90vh", md: "90vh" }}
                w={{
                    base: "100%",
                    md: "90%",
                    lg: "70%",
                    xl: "50%",
                }}
                bgGradient="linear(to-b,blue.100,blue.400,red.300)"
                justifyContent="center" // 縦方向の中央揃え
                alignItems="center" // 横方向の中央揃え
                borderRadius={{ base: "3xl", md: "none" }}
            >
                <Stack
                    spacing={20}
                    p={4}
                    w="100%"
                    h="100%"
                    justifyContent={"center"}
                >
                    <Button
                        as="a"
                        href="/"
                        textAlign={"center"}
                        p={3}
                        color="white"
                        fontWeight="bold"
                        borderRadius="md"
                        boxShadow="dark-lg"
                        bgGradient="linear(to-r, blue.400,red.300)"
                        _hover={{
                            bgGradient: "linear(to-r, blue.300,red.200)",
                        }}
                        w="100%"
                    >
                        SALE
                    </Button>
                    <Button
                        as="a"
                        href="/"
                        textAlign={"center"}
                        p={3}
                        color="white"
                        fontWeight="bold"
                        borderRadius="md"
                        boxShadow="dark-lg"
                        bgGradient="linear(to-r, blue.400,red.300)"
                        _hover={{
                            bgGradient: "linear(to-r, blue.300,red.200)",
                        }}
                        w="100%"
                    >
                        COST
                    </Button>
                    <Button
                        as="a"
                        href="/"
                        textAlign={"center"}
                        p={3}
                        color="white"
                        fontWeight="bold"
                        borderRadius="md"
                        boxShadow="dark-lg"
                        bgGradient="linear(to-r, blue.400,red.300)"
                        _hover={{
                            bgGradient: "linear(to-r, blue.300,red.200)",
                            boxShadow: "",
                        }}
                        w="100%"
                    >
                        MENU
                    </Button>
                    <Button
                        as="a"
                        href="/"
                        textAlign={"center"}
                        p={3}
                        color="white"
                        fontWeight="bold"
                        borderRadius="md"
                        boxShadow="dark-lg"
                        bgGradient="linear(to-r, blue.400,red.300)"
                        _hover={{
                            bgGradient: "linear(to-r, blue.300,red.200)",
                            boxShadow: "",
                        }}
                        w="100%"
                    >
                        REPORT
                    </Button>
                    <Button
                        as="a"
                        href="/"
                        textAlign={"center"}
                        p={3}
                        color="white"
                        fontWeight="bold"
                        borderRadius="md"
                        boxShadow="dark-lg"
                        bgGradient="linear(to-r, blue.400,red.300)"
                        _hover={{
                            bgGradient: "linear(to-r, blue.300,red.200)",
                            boxShadow: "",
                        }}
                        w="100%"
                    >
                        SETTING
                    </Button>
                </Stack>
            </Flex>
        </>
    );
};

export default Sidebar;
