# OOProgrammingChallenge_02c

In this Repo I will be attempting to produce a class structure demonstrating my current knowledge of PHP OO design and implementation skills (yes that was ripped directly from the spec, don't shame me).

My PHP skills are rusty, and my past projects have all been had the helping hand on Laravel so this should be "fun".

---

# Original Spec

This challenge is designed to demonstrate your PHP OO design and implementation skills in a real world
(time constrained) environment.

Time allowed: 1.5 hours

## Scenario

We need to build an order dispatch system, for sending out customer orders with one of a number of
different couriers.

At the start of a normal working day, a new batch will be started, and it will be closed at the end of the
day, when no more parcels are going to be shipped. This is called the dispatch period.

Each parcel sent out with a courier is called a consignment. Each consignment will be given a unique
number - each courier will supply an algorithm for generating their own format of consignment numbers.

At the end of each dispatch period, a list of all the consignment numbers needs to be sent to each
individual courier. The method of data transport varies from courier to courier (e.g. Royal Mail use email,
ANC use anonymous FTP).

## What you should produce

Build a class structure to facilitate the implementation of the scenario set out above. Assume that your
class library will be given to another developer at a later date to build the interface for the client.

The client interface will have three primary functions;
1. Start new batch
2. Add consignment
3. End current batch

## What we are evaluating

We’ll be reviewing your OO analysis and design skills based on the object structure you choose and to
some extent your understanding and ability with PHP based on the code you produce.

Use class/method commenting (ideally phpDoc format) to explain your design decisions. Code re-use,
extensibility and maintenance are all important.

## Notes

Make as much progress as you feel you can within the time allowed; you are not required to produce a
final product.

Do not worry about persistent storage/database abstraction layers/html/visuals – focus on the business
logic and class structures.