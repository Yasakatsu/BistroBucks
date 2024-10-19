import { useState } from "react";
import {
    Box,
    Flex,
    Button,
    Text,
    VStack,
    HStack,
    Divider,
} from "@chakra-ui/react";
import ApplicationLogo from "@/Components/ApplicationLogo";
import Dropdown from "@/Components/Dropdown";
import ResponsiveNavLink from "@/Components/ResponsiveNavLink";

export default function Authenticated({ user, children }) {
    const [showingNavigationDropdown, setShowingNavigationDropdown] =
        useState(false);

    return (
        <Box bgColor="white">
            <Box as="nav">
                <Box mx={9} py={3} >
                    <Flex  justifyContent={"space-between"}>
                        <ApplicationLogo />

                        <HStack>
                            <Box ml={3} position="relative">
                                <Dropdown>
                                    <Dropdown.Trigger>
                                        <Button
                                            type="button"
                                            px={3}
                                            py={2}
                                            border="1px"
                                            borderColor="transparent"
                                            fontSize="sm"
                                            fontWeight="medium"
                                            rounded="md"
                                            color="gray.500"
                                            bg="white"
                                            _hover={{ color: "gray.700" }}
                                            _focus={{
                                                outline: "none",
                                                bg: "gray.100",
                                                color: "gray.500",
                                            }}
                                            transition="ease-in-out duration-150"
                                        >
                                            {user.name}
                                            <Box
                                                as="svg"
                                                ml={2}
                                                mr={-0.5}
                                                h={4}
                                                w={4}
                                                xmlns="http://www.w3.org/2000/svg"
                                                viewBox="0 0 20 20"
                                                fill="currentColor"
                                            >
                                                <path
                                                    fillRule="evenodd"
                                                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                                    clipRule="evenodd"
                                                />
                                            </Box>
                                        </Button>
                                    </Dropdown.Trigger>
                                    <Dropdown.Content>
                                        <Dropdown.Link
                                            href={route("profile.edit")}
                                        >
                                            プロフィール
                                        </Dropdown.Link>
                                        <Dropdown.Link
                                            href={route("logout")}
                                            method="post"
                                            as="button"
                                        >
                                            ログアウト
                                        </Dropdown.Link>
                                    </Dropdown.Content>
                                </Dropdown>
                            </Box>
                        </HStack>

                        <Flex
                            display={{ base: "flex", sm: "none" }}
                            align="center"
                            ml={-2}
                        >
                            <Button
                                onClick={() =>
                                    setShowingNavigationDropdown(
                                        (previousState) => !previousState
                                    )
                                }
                                p={2}
                                rounded="md"
                                color="gray.400"
                                _hover={{ color: "gray.500", bg: "gray.100" }}
                                _focus={{
                                    outline: "none",
                                    bg: "gray.100",
                                    color: "gray.500",
                                }}
                                transition="duration-150 ease-in-out"
                            >
                                <Box
                                    as="svg"
                                    h={6}
                                    w={6}
                                    stroke="currentColor"
                                    fill="none"
                                    viewBox="0 0 24 24"
                                >
                                    <path
                                        className={
                                            !showingNavigationDropdown
                                                ? "inline-flex"
                                                : "hidden"
                                        }
                                        strokeLinecap="round"
                                        strokeLinejoin="round"
                                        strokeWidth="2"
                                        d="M4 6h16M4 12h16M4 18h16"
                                    />
                                    <path
                                        className={
                                            showingNavigationDropdown
                                                ? "inline-flex"
                                                : "hidden"
                                        }
                                        strokeLinecap="round"
                                        strokeLinejoin="round"
                                        strokeWidth="2"
                                        d="M6 18L18 6M6 6l12 12"
                                    />
                                </Box>
                            </Button>
                        </Flex>
                    </Flex>
                </Box>

                <Box
                    display={showingNavigationDropdown ? "block" : "none"}
                    sm={{ display: "none" }}
                >
                    <VStack pt={2} pb={3} spacing={1}>
                        <ResponsiveNavLink
                            href={route("dashboard")}
                            active={route().current("dashboard")}
                        >
                            Dashboard
                        </ResponsiveNavLink>
                    </VStack>

                    <Divider borderColor="gray.200" />

                    <Box pt={4} pb={1}>
                        <Box px={4}>
                            <Text
                                fontSize="base"
                                fontWeight="medium"
                                color="gray.800"
                            >
                                {user.name}
                            </Text>
                            <Text
                                fontSize="sm"
                                fontWeight="medium"
                                color="gray.500"
                            >
                                {user.email}
                            </Text>
                        </Box>

                        <VStack mt={3} spacing={1}>
                            <ResponsiveNavLink href={route("profile.edit")}>
                                Profile
                            </ResponsiveNavLink>
                            <ResponsiveNavLink
                                method="post"
                                href={route("logout")}
                                as="button"
                            >
                                Log Out
                            </ResponsiveNavLink>
                        </VStack>
                    </Box>
                </Box>
            </Box>

            <Box as="main">{children}</Box>
        </Box>
    );
}
