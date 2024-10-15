import React from "react";
import { Box, Stack, Flex } from "@chakra-ui/react";
import { Link } from "@inertiajs/react";
import ApplicationLogo from "@/Components/ApplicationLogo";

const Sidebar = () => {
    return (
        <>
            <Flex
                mt={1}
                height="91.5vh" // 画面全体の高さを確実にカバー
                bgGradient="linear(to-b,blue.100,blue.400,red.300)"
                justifyContent="center" // 縦方向の中央揃え
                alignItems="center" // 横方向の中央揃え
            >
                <Stack spacing={20} p={4} w="100%">
                    {" "}
                    {/* スペーシング調整 */}
                    <Link href="/">
                        <Box
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
                        </Box>
                    </Link>
                    <Link href="/">
                        <Box
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
                            COST
                        </Box>
                    </Link>
                    <Link href="/">
                        <Box
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
                        </Box>
                    </Link>
                    <Link href="/">
                        <Box
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
                        </Box>
                    </Link>
                    <Link href="/">
                        <Box
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
                        </Box>
                    </Link>
                </Stack>
            </Flex>
        </>
    );
};

export default Sidebar;
